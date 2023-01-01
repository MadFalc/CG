<?php
//Function used to normalize the submitted data in create-tour
function normalize_submitted_data(array $submittedData): array
{
    return [
        'destination' =>
        isset($submittedData['destination'])
        ? (string) $submittedData['destination']
        : '',
        'number_of_tickets_available' =>
        isset($submittedData['number_of_tickets_available'])
        ? (int) $submittedData['number_of_tickets_available']
        : 0,
        'is_accessible' =>
        isset($submittedData['is_accessible'])
        ? true
        : false
    ];
}

//Function used to validate the normalized data in create-tour
function validate_normalized_data(array $normalizedData): array
{
    $formErrors = [];

    if ($normalizedData['destination'] === '') {
        $formErrors['destination'] = 'Please provide a destination';
    }

    if ($normalizedData['number_of_tickets_available'] < 1) {
        $formErrors['number_of_tickets_available'] =
            'Number of tickets available should be at least 1';
    }

    return $formErrors;
}

//Function which checks whether data-file (tours.json) exists. If so, the function loads it into an array
function load_all_tours_data(): array
{
    $toursJsonFile = __DIR__ . '/../../data/tours.json';
    if (!file_exists($toursJsonFile)) {
        return [];
    }

    $jsonData = file_get_contents($toursJsonFile);

    return json_decode($jsonData, true);
}

function save_all_tours(array $toursData): void
{
    $toursJsonFile = __DIR__ . '/../../data/tours.json';
    $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
    file_put_contents($toursJsonFile, $jsonData);
}
?>