<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bùi Thành Trung - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form method="POST" action="{{route('registerSubmit')}}">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Bùi Thành Trung - Registration Form</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="userid" class="form-label">User ID:</label>
                        <input type="text" name="userid" id="userid" class="form-control" placeholder="12345">
                        @error('userid')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Abc123Xyz">
                        @error('pass')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address (Optional)</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select name="country" id="country" class="form-select">
                            <option value="">Please select a country</option>
                            <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                            <option value="VN" {{ old('country') == 'VN' ? 'selected' : '' }}>Vietnam</option>
                        </select>
                        @error('country')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="zipcode" class="form-label">ZIP Code</label>
                        <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{ old('zipcode') }}">
                        @error('zipcode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sex</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sex" value="male" id="male" class="form-check-input" {{ old('sex') == 'male' ? 'checked' : '' }}>
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sex" value="female" id="female" class="form-check-input" {{ old('sex') == 'female' ? 'checked' : '' }}>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Language</label><br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="language[]" value="English" id="english" class="form-check-input" {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}>
                            <label for="english" class="form-check-label">English</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="language[]" value="Non English" id="non-english" class="form-check-input" {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}>
                            <label for="non-english" class="form-check-label">Non English</label>
                        </div>
                        @error('language')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About (Optional)</label>
                        <textarea name="about" id="about" class="form-control">{{ old('about') }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" name="btnSubmit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </section>
</body>
</html>