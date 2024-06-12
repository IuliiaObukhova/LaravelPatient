<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PatientsGrid from '@/Components/PatientsGrid.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />

    <AuthenticatedLayout>
       

        <div class="py-4 bg-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="border-b border-gray-200 bg-white">
                        <section>
                            <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6 lg:px-8">
                                <div class="text-center mb-4">
                                    <h3 class="text-3xl font-bold text-gray-900">Patients</h3>
                                    <p class="text-gray-600 mt-2">Browse the List of Patients</p>
                                </div>
                                <div>
                                    <PatientsGrid></PatientsGrid>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
