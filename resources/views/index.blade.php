<x-front-layout>

<main class="flex flex-wrap pb-3 pt-10 px-4 bg-[#d1fae5]">

    <nav class="lg:w-1/3 overflow-auto top-0 lg:h-screen md:w-full flex flex-col items-center px-3 mx-auto p-2 ">
        <div class="w-full mb-4 flex justify-between mx-auto">
      <input class="w-2/3 justify-between rounded-md" placeholder="Enter Category Name" type="text">
      <button class="justify-between px-2 py-1 rounded-md bg-emerald-600 text-white hover:bg-emerald-700 " type="submit"> Add Category</button>
        </div>
        <a href="#"
        class="w-full active-nav-link opacity-75 hover:opacity-100 flex items-center text-white py-4 pl-6">
        Home
    </a>
        <a href="#"
        class="w-full opacity-75 hover:opacity-100 flex items-center text-white py-4 pl-6 nav-item">
        Posts
    </a>

    </nav>

    <section class="lg:w-2/3 md:w-full flex flex-col items-center px-3 mx-auto bg-[#fff] p-2 rounded-md">

        <div class="mb-4 flex mx-auto">
            <input class="lg:w-[400px] mr-2 rounded-md" placeholder="Enter Task Name" type="text">
            <button class="px-2 py-1 rounded-md bg-emerald-600 text-white hover:bg-emerald-700" type="submit"> Add Task</button>
        </div>
        {{-- Tasks --}}

        <table class="text-left w-full border-collapse">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Task</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Due date</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Manage</th>
                </tr>
            </thead>
            <tbody>
                <td class="py-4 px-6 border-b border-grey-light">
                    <input class="" type="checkbox" id="taskItem" name="name" value="false" checked>
                    <label class="" for="taskItem">Task Name</label><br>
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                    19/09/1989
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                    <button class="px-2 py-1 rounded-md bg-blue-600 text-white hover:bg-blue-700 mr-2" type="submit">Edit</button>
                    <button class="px-2 py-1 rounded-md bg-red-600 text-white hover:bg-red-700" type="submit">Delete</button>
                </td>

            </tbody>
        </table>

    </section>

</main>
</x-front-layout>

