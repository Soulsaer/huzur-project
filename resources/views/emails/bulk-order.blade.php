<h3>New Bulk Order Submitted</h3>
<p><strong>Name:</strong> {{ $bulkOrder->name }}</p>
<p><strong>Email:</strong> {{ $bulkOrder->email }}</p>
<p><strong>Mobile:</strong> {{ $bulkOrder->mobile }}</p>
<p><strong>Order Quantity:</strong> {{ $bulkOrder->order_quantity }}</p>
<p><strong>Country:</strong> {{ $bulkOrder->country }}</p>
<p><strong>Material:</strong> {{ $bulkOrder->material }}</p>
<p><strong>Special Details:</strong> {{ $bulkOrder->special_details }}</p>

<!-- Display the Image -->
@if ($bulkOrder->attached_image)
    <p><strong>Image:</strong> <img src="{{ asset('bulkimg/' . basename($bulkOrder->attached_image)) }}" alt="Bulk Order Image" style="width="100" height="100"" ></p>
@endif

<!-- Add more details as needed -->
