<?php

namespace App\Http\Livewire\TicketDetails;

use App\Jobs\TicketUpdatedJob;
use App\Models\Ticket;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Livewire\Component;


class Subcategory extends Component implements HasForms
{
    use InteractsWithForms;

    public Ticket $ticket;
    public bool $updating = false;

    public function mount(): void
    {
        $this->form->fill([
            'subcategory' => $this->ticket->subcategory
        ]);
    }

    public function render()
    {
        return view('livewire.ticket-details.subcategory');
    }

    /**
     * Form schema definition
     *
     * @return array
     */
    protected function getFormSchema(): array
    {
        return [
            Select::make('subcategory')
                ->label(__('Subcategory'))
                ->required()
                ->searchable()
                ->disableLabel()
                ->placeholder(__('Subcategory'))
                ->options(function($state){
                    $subcategories = categories_list();
                    unset($subcategories[$state]);
                    return $subcategories;
                })
        ];
    }

    /**
     * Enable updating
     *
     * @return void
     */
    public function update(): void
    {
        $this->updating = true;
    }

    /**
     * Save main function
     *
     * @return void
     */
    public function save(): void
    {
        $data = $this->form->getState();
        $before = __(config('system.categories.' . $this->ticket->subcategory . '.title')) ?? '-';
        $this->ticket->subcategory = $data['subcategory'];
        $this->ticket->save();
        Notification::make()
            ->success()
            ->title(__('Subcategory updated'))
            ->body(__('The ticket subcategory has been successfully updated'))
            ->send();
        $this->form->fill([
            'subcategory' => $this->ticket->subcategory
        ]);
        $this->updating = false;
        $this->emit('ticketSaved');
        TicketUpdatedJob::dispatch(
            $this->ticket,
            __('Subcategory'),
            $before,
            __(config('system.priorities.' . $this->ticket->subcategory . '.title') ?? '-'),
            auth()->user()
        );
    }
}
