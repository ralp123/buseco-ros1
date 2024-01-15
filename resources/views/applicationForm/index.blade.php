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
    $municipality = [
        'membertype1' => 'Member Type 1',
        'membertype2' => 'Member Type 2',
    ];
    $gender = [
        'male' => 'Male',
        'female' => 'Female',
    ];
    //dd($municipality);
    //dd($barangays[0]);
?>

<x-guest-layout>
    <form method="POST" action="{{route('application.store')}}">
        @csrf

        <!-- Application -->
        <div>
            <x-input-label for="application_status" :value="__('Application Status')" />
            <x-select-input name="application_status" id="application_status" :options="$applicationStatus" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('application_status')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="application_date" :value="__('Application Date')" />
            <x-text-input id="application_date" class="block mt-1 w-full" type="date" name="application_date" :value="old('application_date')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('application_date')" class="mt-2" />
        </div>

        <!-- Info -->
        <div>
            <x-input-label for="fname" :value="__('First Name')" />
            <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="mname" :value="__('Middle Name')" />
            <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="lname" :value="__('Last Name')" />
            <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="spousename" :value="__('Spouse Name')" />
            <x-text-input id="spousename" class="block mt-1 w-full" type="text" name="spousename" :value="old('spousename')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('spousename')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="membertype" :value="__('Member Type')" />
            <x-select-input name="membertype" id="membertype" :options="$membertype" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('membertype')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="municipality" :value="__('Municipality')" />
            <x-select-input-for-query name="municipality" id="municipality" :options="$municipalities" columnToCall="Area" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="barangay" :value="__('Barangay')" />
            <x-select-input-for-query name="barangay" id="barangay" :options="$barangays" columnToCall="Barangay" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="citizenship" :value="__('Citizenship')" />
            <x-text-input id="citizenship" class="block mt-1 w-full" type="text" name="citizenship" :value="old('citizenship')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('citizenship')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <x-select-input name="gender" id="gender" :options="$gender" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="ownership" :value="__('Ownership')" />
            <x-text-input id="ownership" class="block mt-1 w-full" type="text" name="ownership" :value="old('ownership')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('ownership')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tellno" :value="__('Tell No. - Format - 0912-3456-789')" />
            <x-text-input id="tellno" class="block mt-1 w-full" type="text" name="tellno" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" :value="old('tellno')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('tellno')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
