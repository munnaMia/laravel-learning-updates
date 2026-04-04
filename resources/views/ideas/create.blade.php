<x-layout>

    <form method="POST" action="/ideas">
        @csrf

        <div class="col-span-full">
            <label for="idea" class="block text-sm/6 text-white font-bold">new idea</label>
            <div class="mt-2">
                <textarea id="idea" name="idea" rows="3" placeholder="Write somthing"
                    class="border w-full block  rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            {{-- @if ($errors->has('description'))
                <p>You have an error {{$errors}}</p>
            @endif --}}

            {{-- @error('description')
                <p>You have an error {{ $errors }}</p>
            @enderror --}}

            <x-error name='description'>

        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>
