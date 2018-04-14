<template>
    <b-field class="file">
        <b-upload v-model="files" name="pic" >
            <a class="button is-primary">
                <i class="fa fa-upload"> </i> &nbsp
                <span> Upload Profile pic</span>
            </a>
        </b-upload>
        <span class="file-name"
            v-if="files && files.length">
            {{ files[0].name }}
        </span>
    </b-field>
</template>

<script>
    export default {
        data() {
            return {
                files: []
            }
        }
    }
</script>