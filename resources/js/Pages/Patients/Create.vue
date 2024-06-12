
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PatientsGrid from '@/Components/PatientsGrid.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <Head title="New Patient" />

    <AuthenticatedLayout>
       
        <div class="py-8 px-4 sm:px-6 lg:px-8 bg-gray-100">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold text-gray-800 text-center">Patient Information Form</h3>
                        <p class="mt-2 text-sm text-gray-600 text-center">Please fill in the details below to add a new patient record.</p>
                    </div>
                    <div class="p-8 border-t border-gray-200">
                        <form @submit.prevent="submitForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-semibold text-gray-700">First Name</label>
                                    <input v-model="form.firstName" type="text" id="firstName" name="firstName" required
                                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-semibold text-gray-700">Last Name</label>
                                    <input v-model="form.lastName" type="text" id="lastName" name="lastName" required
                                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="healthCardNumber" class="block text-sm font-semibold text-gray-700">Health Card Number</label>
                                <input v-model="form.healthCardNumber" type="number" id="healthCardNumber" name="healthCardNumber" required min="0"
                                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                            </div>
                            <div class="mt-6 flex justify-end">
                                <button type="submit" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head } from '@inertiajs/vue3';

export default {
    components: {
        Head,
    },
    data() {
        return {
            form: {
                firstName: '',
                lastName: '',
                healthCardNumber: null,
            },
        };
    },
    methods: {
        async submitForm() {
            await this.$inertia.post('/patients/store', this.form);
        },
    },
};
</script>
