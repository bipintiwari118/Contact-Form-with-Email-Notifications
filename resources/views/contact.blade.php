<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="new-integrity-hash" crossorigin="anonymous">


</head>
  <body>
    <div class="email-notification">
    <h1>Contact For Any Query</h1>
    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
        <form method="POST" action="{{ route('send.email') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                        <label for="subject">Subject</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                </div>
            </div>
        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
