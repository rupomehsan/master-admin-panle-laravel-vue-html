import { defineStore } from "pinia"

export const user_store = defineStore('user_store', {
    state: () => ({
        all_data: {},
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        all: async function (url) {
            let response
            if (url) {
                response = await axios.get(url)
            } else {
                response = await axios.get('/api/all-users')
            }
            console.log(response.data);
            this.all_data = response.data.data;
        },
        get: async function (id) {
            let response = await axios.get('/api/user/' + id);
            response = response.data.data
            for (const key in response) {
                if (Object.hasOwnProperty.call(response, key)) {
                    const value = response[key];

                    var el = document.querySelector(`input[name='${key}']`);
                    if (el && (el.type == 'text')) {
                        el.value = value
                    }

                    var el = document.querySelector(`textarea[name='${key}']`);
                    if (el && (el.type == 'textarea')) {
                        el.value = value
                    }

                    var el = document.querySelector(`select[name='${key}']`);
                    if (el) {
                        el.value = value
                    }
                }
            }

        },
        store: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post('/api/store', formData)
            window.s_alert(response.data.message)
            console.log(response.data);
        },
        update: async function (id, form) {
            let formData = new FormData(form);
            let response = await axios.post('/api/user/' + id, formData)
            window.s_alert(response.data.message)
            console.log(response.data);
        },
        delete: async function (id) {
            var data = await window.s_confirm()
            if (data) {
                let response = await axios.delete('/api/delete/' + id)
                window.s_alert(response.data.message)
                console.log(response.data);
            }

        },
    },
})
