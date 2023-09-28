<?php include('header.php'); ?>


<section>
  <div class="container">
  <div class="d-flex justify-content-between align-items-center mb-5">
    <div class="d-flex flex-row align-items-center">
      <h4 class="text-uppercase mt-1">Eligible</h4>
      <span class="ms-2 me-3">Pay</span>
    </div>
    <a href="index.php">Cancel and return to the website</a>
  </div>

  <div class="row">
    <div class="col-md-7 col-lg-7 col-xl-6 mb-4 mb-md-0">
      <!--<h5 class="mb-0 text-success">$85.00</h5>-->
      <h5 class="mb-3">Purchase Details</h5>
      <div>
        <div class="d-flex justify-content-between">
          <div class="d-flex flex-row mt-1">
            <h6>Your Purchase</h6>
            <h6 class="fw-bold text-success ms-1"> Amount</h6>
          </div>
          <div class="d-flex flex-row align-items-center text-primary">
            <span class="ms-1">Add Insurer card</span>
          </div>
        </div>
        <p>
                Your purchase and all neccessary dependencies will be submitted to the admin for the covered portion of this order.

        </p>
        <div class="p-2 d-flex justify-content-between align-items-center" style="background-color: #eee;">
          <span>Aetna - Open Access</span>
          <span>Aetna - OAP</span>
        </div>
        <hr />
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-row mt-1">
            <h6>  Balance</h6>
            <h6 class="fw-bold text-success ms-1">Amount</h6>
          </div>
          <div class="d-flex flex-row align-items-center text-primary">
            <span class="ms-1">Add Payment card</span>
          </div>
        </div>
        <p>
          Your purchase and all neccessary dependencies will be submitted to the admin for the covered portion of this order.
        </p>
        <div class="d-flex flex-column mb-3">
          <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" />
            <label class="btn btn-outline-primary btn-lg" for="option1">
              <div class="d-flex justify-content-between">
                <span>VISA </span>
                <span>****</span>
              </div>
            </label>

            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" checked />
            <label class="btn btn-outline-primary btn-lg" for="option2">
              <div class="d-flex justify-content-between">
                <span>MASTER CARD </span>
                <span>****</span>
              </div>
            </label>
          </div>
        </div>
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
          Proceed To Payment
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="row modal-body">
                  <p>If any problem in payment <br>
                        contact or what’s app @<br>
                        +91-6306-459944</p>
                   
               <img class="img-fluid" src="images/payment/barcode1.jpeg" style="width: 250px; height: 200px;">
               
               
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!--<div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1 offset-xl-2">-->
    <!--  <div class="p-3" style="background-color: #eee;">-->
    <!--    <span class="fw-bold">Order Recap</span>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>contracted Price</span> <span>$186.86</span>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>Amount Deductible</span> <span>$0.0</span>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>Coinsurance(0%)</span> <span>+ $0.0</span>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>Copayment </span> <span>+ 40.00</span>-->
    <!--    </div>-->
    <!--    <hr />-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span class="lh-sm">Total Deductible,<br />-->
    <!--        Coinsurance and copay-->
    <!--      </span>-->
    <!--      <span>$40.00</span>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span class="lh-sm">Maximum out-of-pocket <br />-->
    <!--        on insurance policy</span>-->
    <!--      <span>$40.00</span>-->
    <!--    </div>-->
    <!--    <hr />-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>Insurance Responsibility </span> <span>$71.76</span>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>  Balance </span> <span>$13.24</span>-->
    <!--    </div>-->
    <!--    <hr />-->
    <!--    <div class="d-flex justify-content-between mt-2">-->
    <!--      <span>Total </span> <span class="text-success">$85.00</span>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
  </div>
</section>


<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<?php include('footer.php'); ?>