@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('content')

    <div class="container mt-5" id="">
        <h1 class="display-5 my-5 text-center">Privacy Policy
        </h1>
        <p><strong>Effective Date:</strong> 12th June, 2024</p>
        <p><strong>Last Updated:</strong> 12th June, 2024</p>

        <h2>1. Introduction</h2>
        <p>Welcome to Huzurr.com ("Company", "we", "our", "us"). We value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website <a href="https://huzurr.com">huzurr.com</a>, use our services, or make a purchase from our online store.</p>

        <h2>2. Information We Collect</h2>
        <p>We may collect and process the following types of information:</p>

        <h3>2.1 Personal Information</h3>
        <ul>
            <li><strong>Contact Details:</strong> Name, email address, phone number, billing and shipping address.</li>
            <li><strong>Account Information:</strong> Username, password, and other details related to your account.</li>
            <li><strong>Payment Information:</strong> Credit card details, bank account information, and other payment information.</li>
            <li><strong>Purchase History:</strong> Records of products you have purchased from us.</li>
        </ul>

        <h3>2.2 Non-Personal Information</h3>
        <ul>
            <li><strong>Technical Data:</strong> IP address, browser type, operating system, referring URLs, and other technical data.</li>
            <li><strong>Usage Data:</strong> Information about how you use our website and services, including the dates and times of your visits.</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the collected information for the following purposes:</p>
        <ul>
            <li><strong>To Provide Services:</strong> Process your orders, manage your account, and provide customer support.</li>
            <li><strong>To Improve Our Website:</strong> Analyze usage patterns to enhance the functionality and user experience.</li>
            <li><strong>To Communicate:</strong> Send you updates, promotional materials, and other information that may be of interest to you.</li>
            <li><strong>To Protect Against Fraud:</strong> Monitor and prevent fraudulent transactions and activities.</li>
            <li><strong>To Comply with Legal Obligations:</strong> Adhere to applicable laws, regulations, and legal processes.</li>
        </ul>

        <h2>4. How We Share Your Information</h2>
        <p>We may share your information with third parties in the following situations:</p>
        <ul>
            <li><strong>Service Providers:</strong> With vendors and service providers who perform services on our behalf, such as payment processing, shipping, and data analysis.</li>
            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of the transaction.</li>
            <li><strong>Legal Requirements:</strong> To comply with legal obligations, respond to government requests, and protect our rights and interests.</li>
        </ul>

        <h2>5. Data Security</h2>
        <p>We implement a variety of security measures to maintain the safety of your personal information. These include encryption, access controls, and regular security assessments. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>

        <h2>6. Your Rights and Choices</h2>
        <p>You have the following rights regarding your personal information:</p>
        <ul>
            <li><strong>Access and Update:</strong> You can access and update your personal information through your account settings.</li>
            <li><strong>Opt-Out:</strong> You can opt out of receiving promotional communications by following the instructions in those messages.</li>
            <li><strong>Delete:</strong> You can request the deletion of your personal information, subject to certain legal obligations.</li>
            <li><strong>Object:</strong> You can object to the processing of your personal information in certain circumstances.</li>
        </ul>
        <p>To exercise these rights, please contact us at [contact email].</p>

        <h2>7. Cookies and Tracking Technologies</h2>
        <p>We use cookies and similar tracking technologies to enhance your experience on our website. You can manage your cookie preferences through your browser settings. For more information, please see our <a href="[link to Cookie Policy]">Cookie Policy</a>.</p>

        <h2>8. Children's Privacy</h2>
        <p>Our website is not intended for children under the age of 13, and we do not knowingly collect personal information from children under 13. If we become aware that we have collected information from a child under 13, we will take steps to delete such information.</p>

        <h2>9. International Data Transfers</h2>
        <p>If you are accessing our website from outside [your country], please be aware that your information may be transferred to, stored, and processed in [your country] where our servers are located. By using our website, you consent to such transfer.</p>

        <h2>10. Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes.</p>

        <h2>11. Contact Us</h2>
        <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
        <p>
            Huzurr.com<br>
            <p>9610000114</p>
            <a href="mailto:support@huzurr.com">support@huzurr.com</a>
        </p>
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