<template>


        <div class="col-sm">

            <div class="card" v-if="assets">
                <div class="card-header">

                    <div class="d-flex">
                        <div class="align-self-center tx-15 flex-grow-1"><strong>Add New Registration</strong></div>
                        <div class=" mg-l-auto btn-group btn-group-xs">

                            <router-link class="btn btn-card "
                                    :to="{ path: '/'}">
                                <i class="fas fa-times"></i>
                            </router-link>

                        </div>
                    </div>

                </div>

                <div class="card-body" >

                    <table class="table table-striped table-sm table-condensed table-form table-form-dashed">
                        <tbody>

                        <t-form :columns="assets.columns" @emittedItem="updateNewItem" ></t-form>

                        </tbody>
                    </table>

                </div>

                <div class="card-footer">
                    <button class="btn btn-xs btn-primary" @click="store">Save</button>
                </div>


            </div>


        </div>


</template>
<script src="./CreateJs.js"></script>