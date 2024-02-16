<div>
    <x-link url="/register" label="Register" classes="absolute right-8 top-8" />
    <div class="p-8">
        <div class="mx-auto flex flex-col justify-center space-y-6 w-[350px]">
            <div class="flex flex-col space-y-2 text-center">
                <h1 class="text-2xl font-semibold tracking-tight">Login</h1>
            </div>
            <div class="grid gap-6">
                <form wire:submit="login">
                    <div class="grid gap-2">
                        <div class="grid gap-1">
                            <input
                                class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                                id="email" placeholder="name@example.com" autocapitalize="none" autocomplete="email"
                                autocorrect="off" type="email" wire:model="email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input
                                class="{{ $errors->has('password') ? '' : 'my-4' }} flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                                id="password" placeholder="********" autocapitalize="none" autocorrect="off"
                                type="password" wire:model="password" />
                            @error('password')
                                <span class="text-danger mb-4">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-button :isSubmit="true" class="flex items-center">
                            <span wire:loading.remove>Login</span>
                            <x-loading type="secondary" />
                        </x-button>
                    </div>
                </form>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center"><span class="w-full border-t"></span></div>
                    <div class="relative flex justify-center text-xs uppercase"><span
                            class="bg-background px-2 text-muted-foreground">Or continue with</span></div>
                </div>
                <div class="flex items-center justify-center *:mr-2 last:*:mr-0">
                    <x-button type="icon">
                        <x-icon type="{{ Icon::BRAND }}" name="google" />
                    </x-button>
                    <x-button type="icon">
                        <x-icon type="{{ Icon::BRAND }}" name="facebook" />
                    </x-button>
                </div>
            </div>
            <p class="px-8 text-center text-sm text-muted-foreground">By clicking continue, you agree to our <a
                    class="underline underline-offset-4 hover:text-primary" href="/terms">Terms of Service</a> and
                <a class="underline underline-offset-4 hover:text-primary" href="/privacy">Privacy Policy</a>.
            </p>
        </div>
    </div>
</div>
