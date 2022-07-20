<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card mt-5">
                <div class="card-header text-center bg-info">
                    <h2 class="text-white"> <strong>Custom Validation</strong></h2>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <ul class="alert alert-danger pl-5">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('custom.validation.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Your Stack</label>
                            <select name="stack" class="form-control">
                                <option value="">Select One</option>
                                <option value="laravel" {{ old('stack') == 'laravel' ? 'selected' : '' }}>Laravel</option>
                                <option value="react" {{ old('stack') == 'react' ? 'selected' : '' }}>React</option>
                                <option value="vue" {{ old('stack') == 'vue' ? 'selected' : '' }}>Vue</option>
                                <option value="django" {{ old('stack') == 'django' ? 'selected' : '' }}>Django</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Go </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
