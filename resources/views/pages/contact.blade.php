<x-layout title="Contact">
    <section class="max-w-4xl mx-auto py-12 px-4">
        <!-- Heading Section -->
        <div class="text-center mb-8">
            <h1 class="text-sm font-semibold text-gray-500 uppercase">Contact Us</h1>
            <h2 class="text-3xl font-bold text-gray-800 mt-2">Let’s Start a Conversation</h2>
            <p class="text-gray-600 mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim.
            </p>
        </div>

        <!-- Information Section -->
        <div class="bg-purple-600 text-white p-6 rounded-lg flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h3 class="text-lg font-semibold">Working Hours</h3>
                <p class="mt-2">Monday To Friday</p>
                <p>9:00 AM to 8:00 PM</p>
                <p class="mt-1 text-sm">Our Support Team is available 24/7</p>
            </div>
            <div class="text-center md:text-right">
                <h3 class="text-lg font-semibold">Contact Us</h3>
                <p class="mt-2">020 7993 2905</p>
                <p>hello@finsweet.com</p>
            </div>
        </div>

        <!-- Contact Form Section -->
        <form action="#" method="POST" class="bg-white p-8 mt-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Full Name" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                </div>
                <div class="md:col-span-2">
                    <label for="query" class="block text-sm font-medium text-gray-700">Query Related</label>
                    <select id="query" name="query" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                        <option value="">Select an option</option>
                        <option value="support">Support</option>
                        <option value="sales">Sales</option>
                        <option value="general">General Inquiry</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500"></textarea>
                </div>
            </div>
            <button type="submit"
                class="mt-6 w-full bg-yellow-500 text-white py-3 rounded-lg font-medium hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                Send Message
            </button>
        </form>
    </section>
</x-layout>
