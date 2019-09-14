<div class="row text-center">
	<div class="col-md-4 offset-4 input-group input-group-lg mb-3">
		<div class="input-group-prepend">
			<button class="btn btn-success" wire:click="increment">+</button>
		</div>
		<div class="form-control">
			{{ $count }}
		</div>
		<div class="input-group-append">
			<button class="btn btn-danger" wire:click="decrement">-</button>
		</div>
	</div>
	<div class="col-12 small pb-2">{{ $time }}</div>
</div>

<hr class="mt-4 mb-4" />
<div class="ml-5 mr-5">
	<h2>Livewire Counter &amp; Time Project</h2>
	<p>Started with the "Get Started" demo on the Livewire documentation and then extended it a little to see how additional data could be passed in.  Learned some new things, like the Namespace requires that I grab the Carbon from the source.  I also went down the path on how to grab data from other areas of the code, at first I tried something (not sure what I did) but it didn't work.  Then I tried to pass in the info via mount() from the controller but then I found out that the controller isn't triggered after the initial load (as expect but good to know).  Then I discovered the namespace requirement (should have known that) and added the additional code the the app/Http/Livewire/Counter.</p>
	<p>This code was also extended (simply) to Logging and adding Slack to confirm that Livewire is actually heading up to the server and using app/Http/Livewire/Counter.  Sure, sounds silly and I should trust @calebporzio, but it was good to check it out and also not needing to check the log or other local.</p>
	<p>It's working and it was a good place to tinker.</p>
</div>