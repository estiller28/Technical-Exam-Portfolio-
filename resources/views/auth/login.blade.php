<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body>
<div class="sm:container mx-auto">
    <section class="h-screen">
        <div class="px-10 h-full text-gray-800">
            <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
            >
                <div
                    class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="w-full"
                        alt="Sample image"
                    />
                </div>


                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    @if ($errors->any())
                        <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300 my-5 mb-4">
                            <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-red-500">
					<svg fill="currentColor"
                         viewBox="0 0 20 20"
                         class="h-6 w-6">
						<path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
					</svg>
				</span>
                            </div>
                            <div class="alert-content ml-4">
                                <div class="alert-title font-semibold text-lg text-red-800">
                                    {{ __('Whoops, something went wrong') }}
                                </div>
                                <div class="alert-description text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="flex my-4 mb-5 flex-row items-center justify-center lg:justify-start">
                            <p class="text-3xl font-semibold mb-5 mr-4">Login</p>
                        </div>

                        <!-- Email input -->
                        <div class="mb-6">
                            <input
                                type="text"
                                name="email"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput2"
                                placeholder="Email address"
                            />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input
                                type="password"
                                name="password"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput2"
                                placeholder="Password"
                            />

                        </div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    id="exampleCheck2"
                                />
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                                >Remember me</label
                                >
                            </div>
                        </div>

                        <div class="text-center lg:text-left">
                            <button
                                type="submit"
                                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            >
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>
