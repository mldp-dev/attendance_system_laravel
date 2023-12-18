<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Frequently Asked Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Frequently Asked Questions!") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("1. Can I view my attendance history? Yes, you should be able to access your attendance
                    history, which includes details like dates, times, and locations.") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("2. What should I do if I forget to punch in or out?
                    The system allows manual entry, or inform your supervisor or the system administrator to make
                    necessary corrections.") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("3. Is the system accessible for remote work or flexible schedules?
                    Yes, the systems accommodate remote work by allowing employees to log attendance from various
                    locations.
                    ") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("4. How do I add my accomplishments to the system?
                    You can typically add your accomplishments through an interface provided by the system. Look for an
                    Add Accomplishment feature.") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("5. Can I access the Accomplishment System from outside the office?
                    Yes, you might be able to access the Accomplishment System remotely.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>