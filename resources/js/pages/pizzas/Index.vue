<script setup lang="ts">
    type OrderStatus = 'ordered' | 'completed' | 'cancelled'

    interface Pizza {
        name: string
        price: number
    }

    interface Order {
        id: number
        pizza: Pizza
        status: OrderStatus
    }

    const menu: Pizza[] = [
        { name: 'Margherita', price: 5.99 },
        { name: 'Veggie', price: 16.99 },
        { name: 'Pepperoni', price: 6.99 },
        { name: 'Hawaiian', price: 7.99 },
    ]

    let cashInRegister: number = 100
    let orderQueue: Order[] = []
    let nextOrderId: number = 1

    function addNewPizza(newPizza: Pizza): void {
        menu.push(newPizza)
    }

    function placeOrder(pizzaName: string): Order {
        const selectedPizza: Pizza | undefined = menu.find((pizza) => pizza.name === pizzaName)

        if (!selectedPizza) {
            throw new Error('Pizza not found')
        }

        cashInRegister += selectedPizza.price

        const newOrder: Order = {
            id: nextOrderId++,
            pizza: selectedPizza,
            status: 'ordered',
        }

        orderQueue.push(newOrder)
        return newOrder
    }

    function completeOrder(newOrder: Order): void {
        const order: Order | undefined = orderQueue.find((order) => order.id === newOrder.id)

        if (!order) {
            throw new Error('Order not found')
        }

        order.status = 'completed'
    }

    addNewPizza({ name: 'Meat Lovers', price: 9.99 })
    addNewPizza({ name: 'Spicy Chicken', price: 19.99 })
    addNewPizza({ name: 'Sweet Saussage', price: 29.99 })

    const newOrder: Order = placeOrder('Hawaiian')

    if (!orderQueue) {
        throw new Error('No orders yet.')
    }

    completeOrder(newOrder)

    console.log(menu)
    console.log(cashInRegister)
    console.log(orderQueue)
</script>

<template>
  <div class="p-6 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-rose-600 mb-2">Pizzas 🍕</h1>
    <p class="text-gray-700">
      Welcome to our pizzeria home page!
    </p>
  </div>
</template>
