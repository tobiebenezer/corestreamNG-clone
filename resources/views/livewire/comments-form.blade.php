<div>
<section >
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              
              <div class="w-100">
              @guest
                <h5>Login to make comment</h5>
              @endguest
               @auth
                <h5>Add a comment</h5>
                 
                <div class="form-outline">
                  <textarea class="form-control" wire:model = "comment_content" id="textAreaExample" rows="4"></textarea>
                  <label class="form-label" for="textAreaExample">What is your view?</label>
                </div>
                <div class="d-flex justify-content-between mt-3">
                  <input class="form-control" type="email" wire:model ="comment_email" placeholder="Email">
                  
                </div>
                  <button type="button" wire:click ="updateComment"  class="mt-3 btn btn-primary">
                    Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>
              </div>
            </div>
               @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
