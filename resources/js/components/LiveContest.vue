<template>
	<div class="row">
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
            <select class="form-control" id="shorBy">
                <option v-for="sort in sortarray" :value="sort.id" v-if="shorBy == sort.id ? 'selected' : ''">{{ sort.shortings }}</option>
                <option v-for="sort in sortarray" :value="sort.id">{{ sort.shortings }}</option>
            </select>
        </div>
			</div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
            <select class="form-control prize-brand" id="sortPrize">
                <option v-for="prize in prizes" :value="prize.id" v-if="sortPrize == prize.id ? 'selected' : ''">{{ prize.name }}</option>
                <option v-for="prize in prizes" :value="prize.id">{{ prize.name }}</option>
            </select>
        </div>
			</div>
			<div class="col-lg-2 col-md-4">
					<div class="form-group filering-element">
              <select class="prize-brand form-control" id="sortBrand">
              		<option v-for="brand in brands" :value="brand.id" v-if="sortBrand == brand.id ? 'selected' : ''">{{ brand.name }}</option>
                  <option v-for="brand in brands" :value="brand.id">{{ brand.name }}</option>
              </select>
          </div>
			</div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group">
					<div class="rangewrapper">
					  	<div class="sliderfill">
					  		<!-- <input class="customrange" type="range" min="0" max="100" value="30"> -->
					  		<input class="customrange" v-model="sliderVal" type="range" min="1" max="100" step="1" @change="liveAllcontest()" />
					  	</div>
					  	<div class="sliderthumb"></div>
					  	<div class="slidervalue">50</div>
					</div>
				</div>
			</div>
            <div class="col-lg-2 col-md-4">
                <div class="form-group">
                    <div class="wish-filtering">
                        <button><i class="fas fa-heart"></i></button>
                        <button><i class="fas fa-history"></i></button>
                    </div>
                </div>
            </div>
			<div class="col-lg-2 col-md-4">
				<div class="form-group filering-element">
					<input type="search" class="form-control" placeholder="Search here">
				</div>
			</div>
			<div v-if="liveallcontest.length <= 0">
					<p style="color: #fff;">No Item Found</p>
			</div>
			<div v-for="contest in liveallcontest" class="col-lg-4 col-md-6">
        <div class="current-item">
            <a :href="baseUrlPath + '/live-contest-detail/' + contest.id">
                <div class="prize-img">
                    <img :src="baseUrlPath +
                      '/uploads/livecontest/' + contest.f_image">
                </div>
            </a>
            <div class="fav-icon">
            		<wish-button :contest-pass="contest"></wish-button>
                <!-- <a href="#"><i class="far fa-heart"></i></a> -->
            </div>
            <div class="contest-no">
                Contest No:<br><span>{{ contest.contest_no }}</span>
            </div>
            <div class="ticket-detail">
                <a :href="baseUrlPath + '/live-contest-detail/' + contest.id" class="prize-name">{{ contest.title }}</a>
                <p class="ticket-price">${{ contest.price }}</p>
                <hr>
                <div class="ticket-info">
                    <i class="far fa-clock"></i> d  <span class="bar">|</span>
                    <span class="float-right"><i class="fas fa-ticket-alt"></i><b> {{ contest.amount }} Remaining</b></span>
                </div>
            </div>
        </div>
    	</div>
	</div>
</template>
<script>
	import axios from 'axios';
	import {mapActions, mapGetters} from 'vuex';
	$(document).ready(function() {
    $('#shorBy').on('change', function(){
    	var shorBy = $(this).val();
    	if (shorBy == 1) {
    		window.localStorage.removeItem("shorBy");
    		window.location.reload();
    	}else{
    		window.localStorage.setItem('shorBy', shorBy);
    		location.reload();
    	}
    });

    $('#sortPrize').on('change', function(){
    	var sortPrize = $(this).val();
    	if (sortPrize == 1) {
    		window.localStorage.removeItem("sortPrize");
    		window.location.reload();
    	}else{
    		window.localStorage.setItem('sortPrize', sortPrize);
    		location.reload();
    	}
    });

    $('#sortBrand').on('change', function(){
    	var sortBrand = $(this).val();
    	if (sortBrand == 1) {
    		window.localStorage.removeItem("sortBrand");
    		window.location.reload();
    	}else{
    		window.localStorage.setItem('sortBrand', sortBrand);
    		location.reload();
    	}
    });

  });

    export default {

	  data () {
	    return {
	      liveallcontest: {},
	      baseUrlPath: '',
	      sortarray: [
						      {id:1, shortings: 'Sort by' },
						      {id:2, shortings: 'Newest' },
						      {id:3, shortings: 'Oldest' },
						      {id:4, shortings: 'Price high to low' },
						      {id:5, shortings: 'Price low to high' }
						    ],
				prizes: '',
				brands: '',
				sliderVal: '',
				shorBy: window.localStorage.getItem("shorBy"),
				sortPrize: window.localStorage.getItem("sortPrize"),
				sortBrand: window.localStorage.getItem("sortBrand")
	    }
	  },
	  mounted () { 
	  	this.liveAllcontest();
	  	this.loadPrize();
	  	this.loadBrand();
	  	this.liveAllcontest();
	  	this.baseUrlPath = window.axios.defaults.baseURL;
	    
	  },

		 methods:{

		 	...mapActions({
			  			addContest: 'cart/addContest',
			  			singleContestRemove: 'cart/singleContestRemove',
			  			allTicketRemove: 'cart/allTicketRemove'
			  	}),

	    liveAllcontest() {
	    	const shor = window.localStorage.getItem("shorBy");
	    	const prize = window.localStorage.getItem("sortPrize");
	    	const brand = window.localStorage.getItem("sortBrand");

	    	axios.get('/liveAllcontest', { params: {shorBy: shor, sortPrize: prize, sortBrand: brand, amount: this.sliderVal}})
	      .then(response => {
	        this.liveallcontest = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	    loadPrize() {
	    	axios.get('/loadPrize')
	      .then(response => {
	        this.prizes = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    },

	    loadBrand() {
	    	axios.get('/loadBrand')
	      .then(response => {
	        this.brands = response.data
	      })
	      .catch(err => {
	        console.log(err)
	      })
	    }
	  }
};
</script>
<style>
	a.addcart {
		color: red;
	}
</style>



