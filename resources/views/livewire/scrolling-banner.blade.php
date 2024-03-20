@php($message1 = "🛠️ ICT System Maintenance Scheduled for March 16, 2024. Expect Temporary Service Disruptions. 🛠️")


<div class="bg-[#eff5ff] rounded overflow-hidden ">
    <div class="flex whitespace-nowrap text-base font-semibold px-0 py-2 animate-banner-slide-left hover:pause">
        <div class="flex">
        @foreach ($notices as $notice) 
            <div class="px-[30px] py-0">{{$notice->content}}</div>
            <div class="px-[80px] py-0"></div>
        @endforeach
            <!-- Add More Items Here -->
        </div>
    </div>
</div>
