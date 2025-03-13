<div class="content-center">
    <div class="form">
        <h3 class="text-xl text-center pb-3 font-semibold">Welcome to Midterm<span class="text-teal-700">Spatie</span></h3>
        <hr class="border-teal-700">

        <h2 class="text-2xl">Login or create an account.</h2>

       <form wire:submit='login' >
          <div class="inputs">
            <label for="email">Email address</label>
             <input type="text" name="email" wire:model='email'
             class="@error('email') border-red-500 @enderror"
             >
             <span>@error('email') <span class="error">{{ $message }}</span> @enderror
            </span>
          </div>

          <div class="inputs">
            <label for="password" >Password</label>
          <input type="password" name="password" wire:model='password'
          class="@error('password') border-red-500 @enderror"
          >
          <span>@error('password') <span class="error">{{ $message }}</span> @enderror
          </span>
          </div>

          <button type="submit" class="login-register-btn">Log in</button>
       </form>

       <p class="text-sm text-center">Dont have an account? <a href="/register" wire:navigate class="hover:text-teal-700 ">Register</a></p>
    </div>
 </div>
