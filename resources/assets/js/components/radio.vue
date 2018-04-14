<template>
    <section>
        <div class="block">
            <b-radio name="sex" v-model="radio"
                native-value="Male">
            Male
            </b-radio>
            <b-radio name="sex" v-model="radio"
                native-value="Female">
            Female
            </b-radio>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                radio: 'Male'
            }
        }
    }
</script>