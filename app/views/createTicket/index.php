<div class="container w-75 mt-5 rounded py-4" style="background-color:#FF8E0A; height: fit-content;">            
    <h2 class="text-light mb-0 text-center">Create New Ticket</h2>
    <p class="fs-7 text-center text-light py-0">Please fill in the form below to open a new ticket.</p>
    <div class="container mt-4" >
        <form action="<?= BASEURL ?>/createTicket/send" method="post" class="row justify-content-center mt-5 needs-validation" novalidate>            
            <div class="mb-2 col-xl-7">
                  <label for="email" class="form-label mb-1 text-light">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@email.com" required>
                  <div class="invalid-feedback">
                    Please fill your email.
                  </div>
            </div>
            <div class="mb-5 col-xl-7">
                <label for="fullname" class="form-label mb-1 text-light">Full Name</label>
                <input type="text" class="form-control" id="fullname" placeholder="John Doe" name="fullname" required>
                <div class="invalid-feedback">
                    Please fill your name.
                </div>
            </div>            
            <div class="mb-2 col-xl-7">
                <label for="topic" class="form-label mb-1 text-light">Topic</label>
                <select id="topic" name="topic" class="form-select" required>
                    <option selected disabled value="">Choose Topic</option>
                    <option value="Akademik">Akademik</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Kemahasiswaan">Kemahasiswaan</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid topic.
                </div>
            </div>            
            <div class="mb-2 col-xl-7">
                <label for="subject" class="form-label mb-1 text-light">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Batal Tambah" required>
                <div class="invalid-feedback">
                  Please provide a valid subject.
                </div>
            </div>
            <div class="mb-3 col-xl-7">
                <label for="details" class="form-label mb-1 text-light">Problem Details</label>
                <textarea type="text" class="form-control" id="details" name="details" style="height: 15rem;" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in pretium sapien. Etiam lorem massa." required></textarea>
                <div class="invalid-feedback">
                  Details can't be empty.
                </div>
            </div>            
            <div class="button text-center mt-4 mb-3">            
                <button type="button" class="btn btn-secondary btn-sm text-light shadow" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel</button>   
                <button type="submit" class="btn btn-warning btn-sm text-light shadow" name="click">Send</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Cancle Button -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Leave Site?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Changes you made may not be saved.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?= BASEURL ?>" class="btn btn-danger" role="button">Leave</a>        
      </div>
    </div>
  </div>
</div>

<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
</script>
