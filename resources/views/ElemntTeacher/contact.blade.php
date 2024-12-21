@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h2>Contact Us</h2>
    <p>If you have any questions, feel free to reach out using the form below.</p>

    <form action="/contact" method="POST" class="p-4 border rounded bg-light">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message:</label>
        <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection
