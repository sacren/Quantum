<script setup lang="ts">
    interface User {
        id: number
        username: string
        role: string
    }

    let nextUserId: number = 1

    const users: User[] = [
        { id: nextUserId++, username: 'john_doe', role: 'member' },
        { id: nextUserId++, username: 'jane_smith', role: 'contributor' },
        { id: nextUserId++, username: 'bob_jones', role: 'admin' },
        { id: nextUserId++, username: 'sarah_wilson', role: 'member' },
    ]

    function updateUser(id: number, updates: Partial<User>): User {
        const user: User | undefined = users.find((u) => u.id === id)

        if (!user) {
            throw new Error('User not found')
        }

        Object.assign(user, updates)

        return user
    }

    function addNewUser(newUser: Omit<User, 'id'>): User {
        const user: User = {
            id: nextUserId++,
            ...newUser,
        }

        users.push(user)
        return user
    }

    updateUser(1, { username: 'charlie_brown' })
    updateUser(4, { role: 'contributor' })

    addNewUser({ username: 'david_ross', role: 'admin' })

    console.log(users)
</script>

<template>
    <div class="p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-rose-600 mb-2">Pizzas 🍕</h1>
        <p class="text-gray-700">
        Welcome to our pizzeria user page!
        </p>
    </div>
</template>
