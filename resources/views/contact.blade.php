@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('style')
<style>
       
        /*.container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }*/
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5cb85c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .contact-info {
            text-align: center;
            margin-top: 30px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .contact-info a {
            color: #5cb85c;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <h1>Contact Us</h1>
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p>You can also reach us at:</p>
            <p><strong>Huzurr.com</strong></p>
            <p>9610000114</p>
            <p>Email: <a href="mailto:support@huzurr.com">support@huzurr.com</a></p>
        </div>
    </div>

@endsection

@section('js')

        <!-- Should be add in Every Page -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>

            jQuery(document).ready(function ($) {
                var $slickElement = $('.slideshow');

                $slickElement.slick({
                    autoplay: true,
                    dots: false,
                });

            });

        </script>

@endsection