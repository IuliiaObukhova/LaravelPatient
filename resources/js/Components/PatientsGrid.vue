<template>
    <div class="grid-container">
        <div v-for="patient in patients" :key="patient.id" class="grid-item">
            <div class="card">
                <div class="image-wrapper">
                    <img :src="imageString(patient.healthCardNumber)" class="card-img-top" alt="patient image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ patient.id }}
                    </h5>
                    <p class="card-text">
                        <strong>Health Card Number:</strong> {{ patient.healthCardNumber }}<br>
                        <strong>Name:</strong> {{ patient.firstName }} {{ patient.lastName }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            patients: []
        }
    },
    methods: {
        getPatients() {
            axios.get('/patients2')
                .then((response) => {
                    this.patients = response.data.data
                })
        },
        imageString(n) {
            n = n % 11
            return "/images/" + n + ".png"
        }
    },
    mounted() {
        this.getPatients()
    }
}
</script>

<style scoped>
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 16px;
    padding: 16px;
}

.card {
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 16px;
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    background-color: #fff;
    
    
}

.card:hover {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card img {
    width: 100%;
    height: auto;
    
}

.card-body, .card-title, .card-text {
    margin-bottom: 1rem;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #2d3748;
}

.card-text {
    font-size: 1rem;
    color: #4a5568;
}

</style>
