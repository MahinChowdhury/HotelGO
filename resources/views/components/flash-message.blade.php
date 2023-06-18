@if ($message = Session::get('success'))
    <div id="flash-message" class="alert alert-success alert-block position-fixed top-0 start-0 mt-3 ms-3">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>

    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.classList.add('fade-out');

            setTimeout(function() {
                flashMessage.remove();
            }, 1000);
        }, 2500);
    </script>

    <style>
        #flash-message {
            opacity: 1;
            transition: opacity 1s ease;
            z-index: 9999;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
@endif

@if ($message = Session::get('error'))
    <div id="flash-message" class="alert alert-danger alert-block position-fixed top-0 start-0 mt-3 ms-3">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>

    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.classList.add('fade-out');

            setTimeout(function() {
                flashMessage.remove();
            }, 1000);
        }, 2500);
    </script>

    <style>
        #flash-message {
            opacity: 1;
            transition: opacity 1s ease;
            z-index: 9999;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
@endif

@if ($message = Session::get('warning'))
    <div id="flash-message" class="alert alert-warning alert-block position-fixed top-0 start-0 mt-3 ms-3">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>

    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.classList.add('fade-out');

            setTimeout(function() {
                flashMessage.remove();
            }, 1000);
        }, 2500);
    </script>

    <style>
        #flash-message {
            opacity: 1;
            transition: opacity 1s ease;
            z-index: 9999;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
@endif

@if ($message = Session::get('info'))
    <div id="flash-message" class="alert alert-info alert-block position-fixed top-0 start-0 mt-3 ms-3">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>

    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.classList.add('fade-out');

            setTimeout(function() {
                flashMessage.remove();
            }, 1000);
        }, 2500);
    </script>

    <style>
        #flash-message {
            opacity: 1;
            transition: opacity 1s ease;
            z-index: 9999;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
@endif

@if ($errors->any())
    <div id="flash-message" class="alert alert-danger alert-block position-fixed top-0 start-0 mt-3 ms-3">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Check the following errors :(
    </div>

    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.classList.add('fade-out');

            setTimeout(function() {
                flashMessage.remove();
            }, 1000);
        }, 2500);
    </script>

    <style>
        #flash-message {
            opacity: 1;
            transition: opacity 1s ease;
            z-index: 9999;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
@endif
