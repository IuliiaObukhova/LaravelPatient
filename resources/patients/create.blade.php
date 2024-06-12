<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-bold text-dark">
            {{ __('Add Patient Information') }}
        </h2>
    </x-slot>

    <div class="py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h3 class="text-center font-weight-bold text-dark">Patient Information Form</h3>
                            <p class="text-center text-muted">Please fill in the details below to add a new patient record.</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('patients.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstName" class="font-weight-bold">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName" class="font-weight-bold">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="healthCardNumber" class="font-weight-bold">Health Card Number</label>
                                    <input type="number" class="form-control" id="healthCardNumber" name="healthCardNumber" required min="0">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
