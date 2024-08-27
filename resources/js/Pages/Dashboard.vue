<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, useForm } from '@inertiajs/vue3';

import { ref } from 'vue';

import { defineProps } from 'vue';



const school_name = ref('');
const school_type = ref('');
const cass = ref('');

const form = useForm({
    school_name: '',
    school_type: '',
    cass: ''
});

const submit = () => {
    form.post(route('school.store'));
};

const createSchool = () => {
    submit();
};



</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
        </template>

        
        
        <div class="mx-auto overflow-hidden bg-white shadow-sm max-w-8xl h-svh sm:rounded-lg">
            <div class="container mx-auto">
                <caption class="flex justify-center py-2 text-2xl font-bold">Create schools clearance</caption>
                <form @submit.prevent="submit" method="post" action="{{ route('school.store') }}" class="flex flex-col justify-between pb-8 mx-auto mt-2 mb-4 w-96">
                    @csrf
                    <label class="p-2 font-bold" for="name">School Name:</label>
                    <input class="py-2 border border-blue-500 rounded-md" type="text" id="name" v-model="school_name">
                    <label class="p-2 font-bold" for="type">School Type:</label>
                    <select class="py-2 border border-blue-500 rounded-md" id="type" v-model="school_type" name="schoolType">
                        <option class="py-2 border border-blue-500 rounded-md" value="private">Private</option>
                        <option class="py-2 border border-blue-500 rounded-md" value="public">Public</option>
                    </select>
                    <label class="p-2 font-bold" for="cass">CASS:</label>
                    <select class="py-2 border border-blue-500 rounded-md" id="type" v-model="cass" name="cass">
                        <option class="py-2 border border-blue-500 rounded-md" value="1" >Cass 1</option>
                        <option class="py-2 border border-blue-500 rounded-md" value="2" >Cass 2</option>
                        <option class="py-2 border border-blue-500 rounded-md" value="3">Cass 3</option>
                    </select>
                    <button class="w-4/12 py-3 mx-auto my-6 font-bold border border-blue-500 rounded-md hover:bg-blue-300 focus:outline focus:outline-slate-500 focus:border-none" @click="createSchool">Create</button>
                </form>
            </div>
            <div class="container py-4 mx-auto">
                <p class="pb-6 text-2xl font-bold text-center">List of schools </p>
                <table class="border rounded-md md:w-full">
                    <tr class="text-lg">
                        <th>
                            <span>
                                SCHOOL NAME
                            </span>
                        </th>
                        <th>
                            <span>
                                TYPE
                            </span>
                        </th>
                        <th>
                            <span>
                                CASS
                            </span>
                        </th>
                        <th>
                            <span>
                                No of Candidates
                            </span>
                        </th>
                        
                    </tr>
                    
                    <tr class="border" v-for="school in school" :key="school.id">
                        <td>{{ school.school_name }}</td>
                        <td>{{ school.school_type }}</td>
                        <td>CASS{{ school.cass }}</td>
                        <td>{{ school.no }}</td>
                        
                        
                    </tr>
                </table>
            </div>
        </div>
            
       
    </AuthenticatedLayout>
</template>

