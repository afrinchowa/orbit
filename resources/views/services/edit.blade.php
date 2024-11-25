<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Orbit Media</h3>
    </div>
    <div class="container">
        <div class="row  justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('services.index')}}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Edit Service</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{route('services.update',$service->id)}}" method="post">
                    @method("put")
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input type="text" value="{{old('name',$service->name)}}" class="form-control form-control-lg  @error('name') is-invalid                               
                                @enderror " placeholder="Name" name="name">

                                @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Sku</label>
                                <input type="text" value="{{old('sku',$service->sku)}}" class="form-control form-control-lg @error('sku') is-invalid                               
                                @enderror " placeholder="Sku" name="sku">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Description">{{old('description',$service->description)}}</textarea>

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Name" name="image">
                                @if($service->image != "")
                                <img class="w-50 my-3" src="{{asset('upload-img/services/'.$service->image)}}" alt="">
                                @endif

                            </div>

                            <div class="d-grid ">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>