<div class="flex justify-center items-center m-auto h-screen">

    <form action="{{ route('button.update', $button->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4 flex gap-2">
            <label for="title" class="form-label font-bold w-16 ">Title:</label>
            <input type="text" id="title" name="title" class="form-control border-2  w-72 border-black rounded italic"
                value="{{ $button->title }}">
        </div>

        <div class="mb-4 flex gap-2">
            <label for="link" class="form-label font-bold w-16">Link:</label>
            <input type="text" id="link" name="link" class="form-control border-2 w-72 border-black rounded italic"
                value="{{ $button->link }}">
        </div>

        <div class="mb-4 flex gap-2">
            <label for="color" class="form-label font-bold w-16 ">Color:</label>
            <select id="color" name="color" class="form-control border-2 w-72 border-black rounded italic">
                <option value="blue" style="color: blue" {{ $button->color === 'blue' ? 'selected' : '' }}>Blue
                </option>
                <option value="red" style="color: red"{{ $button->color === 'red' ? 'selected' : '' }}>Red</option>
                <option value="green" style="color: green"{{ $button->color === 'green' ? 'selected' : '' }}>Green
                </option>
                <option value="yellow" style="color: yellow"{{ $button->color === 'yellow' ? 'selected' : '' }}>Yellow
                </option>
                <option value="black" style="color: black"{{ $button->color === 'black' ? 'selected' : '' }}>Black
                </option>
                <option value="purple" style="color: purple"{{ $button->color === 'purple' ? 'selected' : '' }}>Purple
                </option>
            </select>
        </div>
        <div class="flex items-center justify-center">
            <button type="submit" class="btn btn-primary border-2 rounded border-black p-2 bg-blue-300 w-full">Update
            </button>
        </div>

    </form>

</div>
