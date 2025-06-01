<div class="container-fluid px-4 py-5">
    <h3 class="text-center mb-4 text-primary">Product Management Dashboard</h3>
    
    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 text-white">#</th>
                            <th class="py-3 text-white">Product</th>
                            <th class="py-3 text-white">Image</th>
                            <th class="py-3 text-white">Price</th>
                            <th class="py-3 text-white">Sold</th>
                            <th class="py-3 text-white">Status</th>
                            <th class="py-3 text-white text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_products = "Select * from `products`";
                        $result = mysqli_query($con, $get_products);
                        $number = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row['product_id'];
                            $product_title = $row['product_title'];
                            $product_image1 = $row['product_image1'];
                            $product_price = $row['product_price'];
                            $status = $row['status'];
                            $number++;
                            
                            // Alternate row colors
                            $row_class = $number % 2 == 0 ? 'bg-light' : 'bg-white';
                            $status_class = $status == 'active' ? 'bg-success' : 'bg-warning';
                        ?>
                        <tr class="<?php echo $row_class; ?>">
                            <td class="fw-semibold"><?php echo $number; ?></td>
                            <td class="fw-semibold text-dark"><?php echo $product_title; ?></td>
                            <td>
                                <img src='./product_images/<?php echo $product_image1; ?>' 
                                     class='rounded img-thumbnail shadow-sm' 
                                     style="width: 60px; height: 60px; object-fit: cover;">
                            </td>
                            <td class="fw-semibold text-primary">₹<?php echo number_format($product_price, 2); ?></td>
                            <td>
                                <?php
                                $get_count = "Select * from `orders_pending` where product_id=$product_id";
                                $result_count = mysqli_query($con, $get_count);
                                $rows_count = mysqli_num_rows($result_count);
                                ?>
                                <span class="badge bg-info rounded-pill px-3 py-1"><?php echo $rows_count; ?> sold</span>
                            </td>
                            <td>
                                <span class="badge <?php echo $status_class; ?> rounded-pill px-3 py-1">
                                    <?php echo ucfirst($status); ?>
                                </span>
                            </td>
                            <td class="text-end">
                                <div class="btn-group" role="group">
                                    <a href='index.php?edit_products=<?php echo $product_id ?>' 
                                       class="btn btn-sm btn-outline-primary rounded-start"
                                       data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href='index.php?delete_product=<?php echo $product_id ?>' 
                                       class="btn btn-sm btn-outline-danger rounded-end"
                                       onclick="return confirm('Are you sure you want to delete this product?')"
                                       data-bs-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.1) !important;
        transform: scale(1.01);
        transition: all 0.2s ease;
    }
    .card {
        border-radius: 12px;
    }
    .img-thumbnail {
        border: 2px solid #dee2e6;
        transition: transform 0.3s ease;
    }
    .img-thumbnail:hover {
        transform: scale(1.1);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Enable tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>