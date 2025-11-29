<script setup lang="ts">
    type UpdatedUser = Partial<User>

    interface User {
        id: number
        username: string
        role: string
    }

    const users: User[] = [
        { id: 1, username: 'john_doe', role: 'member' },
        { id: 2, username: 'jane_smith', role: 'contributor' },
        { id: 3, username: 'bob_jones', role: 'admin' },
        { id: 4, username: 'sarah_wilson', role: 'member' },
    ]

    function updateUser(id: number, updates: UpdatedUser): User {
        const user: User | undefined = users.find((u) => u.id === id)

        if (!user) {
            throw new Error('User not found')
        }

        Object.assign(user, updates)

        return user
    }

    updateUser(1, { username: 'charlie_brown' })
    updateUser(4, { role: 'contributor' })

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
