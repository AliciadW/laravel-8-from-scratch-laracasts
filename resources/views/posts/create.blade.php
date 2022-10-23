<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-xl font-bold mb-4"> Create a new post </h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title"></x-form.input>

                <x-form.input name="slug"></x-form.input>

                <x-form.input name="thumbnail" type="file"></x-form.input>

                <x-form.textarea name="excerpt" rows="3"></x-form.textarea>

                <x-form.textarea name="body"></x-form.textarea>

                <x-form.field>
                    <x-form.label name="category"></x-form.label>

                    <select class="border border-gray-400 p-2 w-full" name="category_id" id="category_id"
                            required>
                        @foreach(\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    <x-form.error name="category"/>
                </x-form.field>

                <x-form.button>Publish</x-form.button>
            </form>
        </x-panel>
    </section>
</x-layout>
