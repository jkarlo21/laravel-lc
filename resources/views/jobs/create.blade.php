<x-layout>
	<x-slot:heading>
			Create Job
	</x-slot:heading>

	<form method="POST" action="/jobs">
			@csrf
			<div class="space-y-12">
					<section class="border-b border-gray-900/10 pb-12">
							<h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
							<p class="mt-1 text-sm/6 text-gray-600">
								We just need a handful of details from you.
							</p>

							<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
									<label for="title" class="sm:col-span-4">
											<span class="block text-sm/6 font-medium text-gray-900">Title</span>
											<div class="mt-2 flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
													<input 
															type="text" 
															name="title" 
															id="title" 
															placeholder="Shift Leader"
															class="block w-full py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
													>
											</div>
									</label>
							</div>
							<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
								<label for="salary" class="sm:col-span-4">
										<span class="block text-sm/6 font-medium text-gray-900">Salary</span>
										<div class="mt-2 flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
												<input 
														type="text" 
														name="salary" 
														id="salary" 
														placeholder="$50,000 Per Year"
														class="block w-full py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
												>
										</div>
								</label>
							</div>
					</section>
			</div>

			<div class="mt-6 flex items-center justify-end gap-x-6">
					<button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
					<button 
							type="submit" 
							class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
							Save
					</button>
			</div>
	</form>
</x-layout>
