<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Chat Laravel</title>
</head>

<body>
    <div class="flex flex-col h-screen w-screen bg-white">
        <div id="chat" class="flex flex-col mt-2 flex-col-reverse overflow-y-scroll	 space-y-3 mb-20 pb-3 ">
            
        </div>
        <div class="flex flex-row  items-center  bottom-0 my-2 w-full">
            <div class="ml-2 flex flex-row border-gray items-center w-full border rounded-3xl h-12 px-2">
                <div class="w-full">
                    <input type="text" id="message"
                        class="border rounded-2xl border-transparent w-full focus:outline-none text-sm h-10 flex items-center"
                        placeholder="Type your message...." />
                </div>
            </div>
            <div class="ml-3 mr-2 ml-2 flex flex-row border-gray items-center border rounded-3xl h-12 px-2">
                <input type="text" id="pseudo"
                        class="border rounded-2xl border-transparent w-full focus:outline-none text-sm h-10 flex items-center"
                        placeholder="Enter your pseudo" />
            </div>
            <div>
                <button id="submit"
                    class="flex items-center justify-center h-10 w-10 mr-2 rounded-full bg-gray-200 hover:bg-gray-300 text-indigo-800 text-white focus:outline-none">
                    <svg class="w-5 h-5 transform rotate-90 -mr-px" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
