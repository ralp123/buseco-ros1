<?php 
    $applicationStatus = [
        'pending' => 'Pending',
        'approved' => 'Approved',
        'not_approved' => 'Not Approved',
        'completed' => 'Completed',
    ];
    $membertype = [
        'membertype1' => 'Member Type 1',
        'membertype2' => 'Member Type 2',
    ];
    $gender = [
        'male' => 'Male',
        'female' => 'Female',
    ];
    $civilStatus = [
        'single' => 'Single',
        'married' => 'Married',
        'widow' => 'Widow',
        'separated' => 'Separated',
    ];
    //dd($municipality);
    //dd($barangays[0]);
?>

<x-guest-layout>
    <form method="POST" action="{{route('application.store')}}">
        @csrf
        
        <h2 class="text-1lg font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Member Consumer Owner(MCO) Information Form</h2>
        <!-- Info -->
        <div class="grid grid-cols-3 gap-3 mt-2">
            <div>
                <x-input-label for="fname" :value="__('First Name')" />
                <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="mname" :value="__('Middle Name')" />
                <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('mname')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="lname" :value="__('Last Name')" />
                <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
            </div>   
        </div>
        <div class="grid grid-cols-5 gap-3 mt-2">
            <div>
                <x-input-label for="birthdate" :value="__('Birthdate')" />
                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="citizenship" :value="__('Nationality')" />
                <x-text-input id="citizenship" class="block mt-1 w-full" type="text" name="citizenship" :value="old('citizenship')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('citizenship')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="civilstatus" :value="__('Civil Satus')" />
                <x-select-input name="civilstatus" id="civilstatus" :options="$civilStatus" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('civilstatus')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="gender" :value="__('Gender')" />
                <x-select-input name="gender" id="gender" :options="$gender" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="tellno" :value="__('Tell No. - Format - 0912-3456-789')" />
                <x-text-input id="tellno" class="block mt-1 w-full" type="text" name="tellno" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" :value="old('tellno')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('tellno')" class="mt-2" />
            </div>
        </div>
        <div class="grid grid-cols-5 gap-3 mt-2">
            <div>
                <x-input-label for="ctcissuedate" :value="__('CTC Issue Date')" />
                <x-text-input id="ctcissuedate" class="block mt-1 w-full" type="date" name="ctcissuedate" :value="old('ctcissuedate')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('ctcissuedate')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="ctcno" :value="__('CTC No.')" />
                <x-text-input id="ctcno" class="block mt-1 w-full" type="text" name="ctcno" :value="old('ctcno')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('ctcno')" class="mt-2" />
            </div>
        </div>

        <h2 class="text-1lg font-bold leading-7 mt-1 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Residence Address</h2>
        <div class="grid grid-cols-5 gap-3 mt-2">
            <div>
                <x-input-label for="houseno" :value="__('House No.')" />
                <x-text-input id="houseno" class="block mt-1 w-full" type="text" name="houseno" :value="old('houseno')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('houseno')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="sitio" :value="__('Sitio')" />
                <x-select-input-for-sitio name="sitio" id="sitio" :options="$sitio" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('sitio')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="barangay" :value="__('Barangay')" />
                <x-select-input-for-query name="barangay" id="barangay" :options="$barangays" columnToCall="Barangay" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="municipality" :value="__('Municipality')" />
                <x-select-input-for-query name="municipality" id="municipality" :options="$municipalities" columnToCall="Area" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
            </div>
        </div>

        <h2 class="text-1lg font-bold leading-7 mt-1 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Information on Spouse and Children</h2>
        <div class="grid grid-cols-5 gap-3 mt-2">
            <div>
                <x-input-label for="spousename" :value="__('Spouse Name')" />
                <x-text-input id="spousename" class="block mt-1 w-full" type="text" name="spousename" :value="old('spousename')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('spousename')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="spousebirthdate" :value="__('Spouse Birthdate')" />
                <x-text-input id="spousebirthdate" class="block mt-1 w-full" type="date" name="spousebirthdate" :value="old('spousebirthdate')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('spousebirthdate')" class="mt-2" />
            </div>
        </div>
        <div class="grid grid-cols-4 gap-3 mt-2">
            <div>
                <x-input-label for="children1" :value="__('Children 1')" />
                <x-text-input id="children1" class="block mt-1 w-full" type="text" name="children1" :value="old('children1')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('children1')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="children2" :value="__('Children 2')" />
                <x-text-input id="children2" class="block mt-1 w-full" type="text" name="children2" :value="old('children2')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('children2')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="children3" :value="__('Children 3')" />
                <x-text-input id="children3" class="block mt-1 w-full" type="text" name="children3" :value="old('children3')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('children3')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="children4" :value="__('Children 4')" />
                <x-text-input id="children4" class="block mt-1 w-full" type="text" name="children4" :value="old('children4')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('children4')" class="mt-2" />
            </div>
        </div>
      
       
        {{-- <div>
            <x-input-label for="ownership" :value="__('Ownership')" />
            <x-text-input id="ownership" class="block mt-1 w-full" type="text" name="ownership" :value="old('ownership')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('ownership')" class="mt-2" />
        </div> --}}
       
        

         <!-- Application -->
        {{-- <div>
            <x-input-label for="application_status" :value="__('Application Status')" />
            <x-select-input name="application_status" id="application_status" :options="$applicationStatus" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('application_status')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="application_date" :value="__('Application Date')" />
            <x-text-input id="application_date" class="block mt-1 w-full" type="date" name="application_date" :value="old('application_date')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('application_date')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="membertype" :value="__('Member Type')" />
            <x-select-input name="membertype" id="membertype" :options="$membertype" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('membertype')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
