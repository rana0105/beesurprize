<template>
	<div class="c-style">
    <span class="total-price">
      {{ totalPrice }}
    </span>
    <a v-if="isLoggedIn" :href="baseUrlPath + '/cart'">
        <img :src="baseUrlPath +
                      '/frontend/img/cart-icon.png'">
            <span class="badge">
                {{ totalCount }}
            </span>
        </img>
    </a>
    <a v-if="!isLoggedIn" href="/">
        <img :src="baseUrlPath +
                      '/frontend/img/cart-icon.png'">
            <span class="badge">
                {{ totalCount }}
            </span>
        </img>
    </a>
	</div>
</template>
<script>
	import axios from 'axios';
	import {mapActions, mapGetters} from 'vuex';
    export default {

	  data () {
      return {
        baseUrlPath: '',
        isLoggedIn: ''
      }
    },
    mounted () { 
      this.baseUrlPath = window.axios.defaults.baseURL;
      this.isLoggedIn = window.localStorage.getItem("user") != null;
      
    },

	  computed: {
	  	...mapGetters({
	  		contests: 'cart/contests',
	  	}),

  	posts () {

  		var resArr = [];
			this.contests.forEach(function(item){
			  var i = resArr.findIndex(x => x.id == item.post_id);
			  if(i <= -1){
			    resArr.push({id: item.post_id, title: item.title, image: item.image, contest_no:item.contest_no, price:item.price, ticket_no: [item.ticket_no] });
			  } else {
			  	resArr[i].ticket_no.push(item.ticket_no);
			  }

			});

			return resArr;
		  },

      totalCount() {
        let sum = 0;
        _.each(this.posts, p=>{
          sum += p.ticket_no.length;
        })
        return sum;
      },

      totalPrice() {
        let sum = 0;
        _.each(this.posts, p=>{
          sum += p.ticket_no.length * p.price;
        })
        return sum;
      }
	  }
};
</script>
<style>
  .c-style {
    float: left;
  }
</style>
