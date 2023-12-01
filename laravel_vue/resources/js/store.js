import { createStore } from 'vuex';

const store = createStore({
	state() {
		return {
			testStr: 'vuex 테스ㅡㅌ',
			laravelData: null,
		}
	},

	mutations: {
		setLarvelData(state, data) {
			state.laravelData = data;
		}
	},

	actions: {

	},
})

export default store;