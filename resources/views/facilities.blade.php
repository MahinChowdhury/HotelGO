<x-layout>
    <div class="my-5 px-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
        <hr>
        <div class="h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
            Ab, porro tenetur asperiores dolor, unde nulla voluptatibus eius, voluptatem cumque consectetur quod!<br>
            Numquam inventore doloremque rerum voluptate voluptatibus, quam vitae quaerat.</p>
    </div>

    <div class="container bg-warning pb-4 pl-4 pr-4">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
        <div class="row justify-content-around px-lg-0 px-md-0 px-5 mb-5">
            @foreach($facilities as $facility)
                <div class="col-lg-2 col-md-2 text-center bg-white rounded myshadow py-4">
                    <img src="{{ asset('upload/'. $facility->icon) }}" width="80px">
                    <h5 class="mt-3 mb-3">{{$facility->name}}</h5>
                    <p>{{$facility->description}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="pagination">
        {{ $facilities->links() }}
    </div>

</x-layout>
