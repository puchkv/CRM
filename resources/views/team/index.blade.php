<x-app-layout>
    <div>
        <form method="POST" action="{{ route('team.store')}}">'
            @csrf

            <label for="emp_firstname">Ім'я спіробітника</label>
            <input name="emp_firstname" type='text' placeholder="Employee first name" />
            <label for="emp_lastname">Призвіще спіробітника</label>
            <input name="emp_lastname" type='text' placeholder="Employee last name" />
            <label for="emp_email">Email</label>
            <input name="emp_email" type='text' placeholder="Employee email" />


            <x-primary-button>{{ __('Employee') }}</x-primary-button>
        </form>
    </div>


    <div>
        <ul>
            <li></li>
        </ul>
    </div>

</x-app-layout>