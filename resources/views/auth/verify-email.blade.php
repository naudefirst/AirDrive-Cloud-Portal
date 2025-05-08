<x-layout>
    <section class="flex flex-col h-full lg:items-center lg:justify-center">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto max-w-7xl lg:py-0">

            <img src="https://s3.ap-southeast-2.wasabisys.com/airdrive-coolify/AirDrive-Cloud-Portals-Banner.png"
                 alt="AirDrive Cloud Logo"
                 width="200"
                 style="margin-bottom: 1rem;" />

            <h1> Verification Email Sent </h1>

            <div class="flex justify-center gap-2 text-center">
                <br> Welcome to AirDrive Cloud
                <br>
                <br>To activate your account, please open the email and follow the instructions.
            </div>

            <livewire:verify-email />

        </div>
    </section>
</x-layout>
