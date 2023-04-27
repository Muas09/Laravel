<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>

    <form method="POST" action="{{ url('/users') }}">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" value="{{ old('age') }}" required>
            @error('age')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required>
            @error('date')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="web">Web:</label>
            <input type="url" name="web" id="web" value="{{ old('web') }}" required>
            @error('web')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="address">Address:</label>
            <textarea name="address" id="address" required>{{ old('address') }}</textarea>
            @error('address')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>

</body>
</html>
