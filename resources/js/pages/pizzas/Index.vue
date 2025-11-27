<script setup lang="ts">
    type OrderStatus = 'ordered' | 'completed' | 'cancelled'

    interface Identifiable {
        id: number
    }

    interface Pizza extends Identifiable {
        name: string
        price: number
    }

    interface Order extends Identifiable {
        pizza: Pizza
        status: OrderStatus
    }

    let cashInRegister: number = 100
    let orderQueue: Order[] = []
    let nextOrderId: number = 1
    let nextPizzaId: number = 1

    const menu: Pizza[] = [
        { id: nextPizzaId++, name: 'Margherita', price: 5.99 },
        { id: nextPizzaId++, name: 'Veggie', price: 16.99 },
        { id: nextPizzaId++, name: 'Pepperoni', price: 6.99 },
        { id: nextPizzaId++, name: 'Hawaiian', price: 7.99 },
    ]

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

    addNewPizza({ id: nextPizzaId++, name: 'Meat Lovers', price: 9.99 })
    addNewPizza({ id: nextPizzaId++, name: 'Spicy Chicken', price: 19.99 })
    addNewPizza({ id: nextPizzaId++, name: 'Sweet Saussage', price: 29.99 })

    const newOrder: Order = placeOrder('Hawaiian')

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
