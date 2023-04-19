<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="px-4 sm:px-6 lg:px-8">
                {{$blogs[6]->start_date}}
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>

                            <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their
                                name, title, email and role.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <button type="button"
                                class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                                user</button>
                        </div>
                    </div>
                    <div class="-mx-4 mt-8 sm:-mx-0">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                        Name</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                        Title</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Email</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-0">
                                        Lindsay Walton
                                        <dl class="font-normal lg:hidden">
                                            <dt class="sr-only">Title</dt>
                                            <dd class="mt-1 truncate text-gray-700">Front-end Developer</dd>
                                            <dt class="sr-only sm:hidden">Email</dt>
                                            <dd class="mt-1 truncate text-gray-500 sm:hidden">lindsay.walton@example.com
                                            </dd>
                                        </dl>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">Front-end Developer
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        lindsay.walton@example.com</td>
                                    <td class="px-3 py-4 text-sm text-gray-500">Member</td>
                                    <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                class="sr-only">, Lindsay Walton</span></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                     </div>
                </div>

            </div>
        </div>
    </div>
</div>
