<x-layout>
    <div class="container mt-3">

        <h2 class="mb-3">Your transaction has been completed succesfully!</h2>
        <h6 class="mb-4">You will recieve a confirmation email on your mail soon.</h6>
        <form action="{{url("invoice")}}" method="POST">
            @csrf
            <input type="hidden" name="tran_id" value="{{$request['tran_id']}}"/>
            <button type="submit" class="btn btn-dark mb-4">Download Invoice</button>
        </form>

        <h5 class="mb-4 mt-4">Do you want to browse more rooms?</h5>
        <a href="/"><button class="btn btn-primary mb-4">Browse more rooms</button></a>
    </div>
</x-layout>
