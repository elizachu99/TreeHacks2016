<?php
namespace Aws\DeviceFarm;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DeviceFarm** service.
 *
 * @method \Aws\Result createDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevicePoolAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result createUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUploadAsync(array $args = [])
 * @method \Aws\Result deleteDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevicePoolAsync(array $args = [])
 * @method \Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws\Result deleteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRunAsync(array $args = [])
 * @method \Aws\Result deleteUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUploadAsync(array $args = [])
 * @method \Aws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \Aws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Aws\Result getDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolAsync(array $args = [])
 * @method \Aws\Result getDevicePoolCompatibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolCompatibilityAsync(array $args = [])
 * @method \Aws\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \Aws\Result getProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \Aws\Result getRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRunAsync(array $args = [])
 * @method \Aws\Result getSuite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteAsync(array $args = [])
 * @method \Aws\Result getTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTestAsync(array $args = [])
 * @method \Aws\Result getUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUploadAsync(array $args = [])
 * @method \Aws\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \Aws\Result listDevicePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicePoolsAsync(array $args = [])
 * @method \Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRunsAsync(array $args = [])
 * @method \Aws\Result listSamples(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSamplesAsync(array $args = [])
 * @method \Aws\Result listSuites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuitesAsync(array $args = [])
 * @method \Aws\Result listTests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTestsAsync(array $args = [])
 * @method \Aws\Result listUniqueProblems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUniqueProblemsAsync(array $args = [])
 * @method \Aws\Result listUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUploadsAsync(array $args = [])
 * @method \Aws\Result scheduleRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleRunAsync(array $args = [])
 * @method \Aws\Result updateDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePoolAsync(array $args = [])
 * @method \Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class DeviceFarmClient extends AwsClient {}