<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-bold text-dark">
            {{ __('Welcome to Health Care') }}
        </h2>
    </x-slot>

    <div class="py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow-sm rounded-lg overflow-hidden">
                        <div class="card-body bg-white border-bottom border-secondary">
                            <section>
                                <div class="w-100 px-4 py-5 mx-auto">
                                    <div class="text-center mb-4">
                                        <h3 class="display-4 font-weight-bold text-dark">Patients</h3>
                                        <p class="text-muted mt-2">Browse the List of Patients</p>
                                    </div>
                                    <div class="row">
                                        <patients-grid></patients-grid>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
