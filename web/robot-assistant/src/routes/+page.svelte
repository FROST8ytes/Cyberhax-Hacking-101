<script>
	import logo from '$lib/cyberhax-logo.png';
</script>

<div class="container h-full mx-auto flex justify-center items-center">
	<div class="space-y-10 text-center flex flex-col items-center">
		<h2 class="h2">Welcome to Robot Assistant.</h2>
		<!-- Animated Logo -->
		<figure>
			<section class="img-bg" />
			<img alt="Cyberhax logo" src={logo} />
		</figure>
		<!-- / -->
		<div class="flex justify-center space-x-2">
			<!-- svelte-ignore a11y-missing-attribute -->
			<!-- svelte-ignore a11y-click-events-have-key-events -->
			<!-- svelte-ignore a11y-no-static-element-interactions -->
			<a
				class="btn variant-filled"
				on:click={() => alert("Sorry, your robot is charging.")}
			>
				Launch Robot
			</a>
		</div>
	</div>
</div>

<style lang="postcss">
	figure {
		@apply flex relative flex-col;
	}
	figure img,
	.img-bg {
		@apply w-64 h-64 md:w-80 md:h-80;
	}
	.img-bg {
		@apply absolute z-[-1] rounded-full blur-[50px] transition-all;
		animation: pulse 5s cubic-bezier(0, 0, 0, 0.5) infinite,
			glow 5s linear infinite;
	}
	@keyframes glow {
		0% {
			@apply bg-primary-400/50;
		}
		33% {
			@apply bg-secondary-400/50;
		}
		66% {
			@apply bg-tertiary-400/50;
		}
		100% {
			@apply bg-primary-400/50;
		}
	}
	@keyframes pulse {
		50% {
			transform: scale(1.5);
		}
	}
</style>
